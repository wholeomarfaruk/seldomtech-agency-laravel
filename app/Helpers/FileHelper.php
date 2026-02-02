<?php

use App\Models\File;
use App\Models\FileItem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use function PHPSTORM_META\type;

if (!function_exists('upload_file')) {

    /**
     * Upload an image safely (Livewire-compatible), with optional resize
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @param  string  $path
     * @param  array  $sizes   Example: ['thumbnail' => ['width'=>100,'height'=>100]]
     * @param  int  $quality
     * @param  string  $disk
     * @return array  paths of original + resized images
     */
    function upload_file($file, $path = 'uploads', $sizes = [], $quality = 80, $disk = 'public',$suffix = null,$file_id = null)
    {
        if (!$file && !$file_id) {
            return [];
        };

        $extension = strtolower($file->getClientOriginalExtension());
        $filename  = Str::uuid().($suffix ? '-'.$suffix : '');
        $paths = [];

        // ---------- ORIGINAL ----------
        $originalPath = trim($path, '/') . '/original/' . $filename . '.' . $extension;
        $content = file_get_contents($file->getRealPath()); // safe copy
        Storage::disk($disk)->put($originalPath, $content);

        // $paths['original'] = $originalPath;

        //save to db
        //  protected $fillable = [
        // 'file_id',
        // 'type',
        // 'size',
        // 'path',
        //     ];
        if($file_id){
            $original =FileItem::create([
                'file_id' => $file_id,
                'path' => $originalPath,
                'type' => 'original',
                'size' => $file->getSize(),
            ]);
            $paths['original'] = $original->toArray();
        }
        // ---------- RESIZED ----------
        // foreach ($sizes as $key => $size) {
        //     $width  = $size['width'] ?? null;
        //     $height = $size['height'] ?? null;

        //     if (!$width && !$height) continue;

        //     $image = Image::make($content)
        //         ->resize($width, $height, function ($constraint) {
        //             $constraint->aspectRatio();
        //             $constraint->upsize();
        //         })
        //         ->encode($extension, $quality);

        //     $resizePath = trim($path, '/') . '/' . $key . '/' . $filename . '.' . $extension;
        //     Storage::disk($disk)->put($resizePath, (string) $image);

        //     $paths[$key] = $resizePath;
        // }

        return $paths;
    }
}

if (!function_exists('delete_file')) {
    function delete_file($file)
    {
       $file->getAll()->each(function ($item) {
           Storage::disk(config('uploadconfig.disk'))->delete($item->path);
       });
       $file->delete();
    }
}
if (!function_exists('upload')) {
    function upload($modelClass,$id, $filefor, $file, $oldFile = null,$name=null,$caption=null)
    {
        $config = config("uploadconfig.models.$modelClass.$filefor");
        // dd($file);
        if (!is_array($config) || !$file  || !is_integer($id)) {
            return null;
        };



        $disk = config('uploadconfig.disk');
        $basePath = config('uploadconfig.base_path');
        $path = trim($basePath . '/' . $config['path'], '/');
        $quality = $config['quality'] ?? 80;
        $type = $config['type'];
        $suffix = config('uploadconfig.suffix');
        // validation
        $ext = strtolower($file->getClientOriginalExtension());

        if (!in_array($ext, $config['allowed'])) {
            throw new \Exception('Invalid file type');
        }

        if (($file->getSize() / 1024) > $config['max_size']) {
            throw new \Exception('File too large');
        }



        // upload image

        // protected $fillable = [
        //     'name',
        //     'caption',
        //     'for',
        //     'type',
        //     'extension',
        //     'model_id',
        //     'model_type',
        // ];
       $DBFile= File::create([
            'name' => $name ?? $file->getClientOriginalName(),
            'caption' => $caption ?? null,
            'extension' => $ext,
            'for' => $filefor,
            'model_type' => $modelClass,
            'model_id' => $id,
            'type' => $type,
        ]);
         $uploaded= upload_file(
            $file,
            $path,
            $config['items'] ?? [],
            $quality,
            $disk,
            $suffix,
            $DBFile->id,
        );
        if(!$uploaded && $uploaded===[]){
            $DBFile->delete();
            throw new \Exception('File upload failed');
        }
        if($uploaded && $uploaded!==[]){
            if($oldFile){

                    delete_file($oldFile);

            }
        }

        return $DBFile->load('getAll');
    }
}
