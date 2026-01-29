<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Afghanistan', 'code' => 'af', 'phone_code' => '+93', 'is_active' => 1],
            ['name' => 'Albania', 'code' => 'al', 'phone_code' => '+355', 'is_active' => 1],
            ['name' => 'Algeria', 'code' => 'dz', 'phone_code' => '+213', 'is_active' => 1],
            ['name' => 'Andorra', 'code' => 'ad', 'phone_code' => '+376', 'is_active' => 1],
            ['name' => 'Angola', 'code' => 'ao', 'phone_code' => '+244', 'is_active' => 1],
            ['name' => 'Anguilla', 'code' => 'ai', 'phone_code' => '+1264', 'is_active' => 1],
            ['name' => 'Antarctica', 'code' => 'aq', 'phone_code' => '', 'is_active' => 0],
            ['name' => 'Antigua and Barbuda', 'code' => 'ag', 'phone_code' => '+1 268', 'is_active' => 1],
            ['name' => 'Argentina', 'code' => 'ar', 'phone_code' => '+54', 'is_active' => 1],
            ['name' => 'Armenia', 'code' => 'am', 'phone_code' => '+374', 'is_active' => 1],
            ['name' => 'Aruba', 'code' => 'aw', 'phone_code' => '+297', 'is_active' => 1],
            ['name' => 'Australia', 'code' => 'au', 'phone_code' => '+61', 'is_active' => 1],
            ['name' => 'Austria', 'code' => 'at', 'phone_code' => '+43', 'is_active' => 1],
            ['name' => 'Azerbaijan', 'code' => 'az', 'phone_code' => '+994', 'is_active' => 1],
            ['name' => 'Bahamas', 'code' => 'bs', 'phone_code' => '+1242', 'is_active' => 1],
            ['name' => 'Bahrain', 'code' => 'bh', 'phone_code' => '+973', 'is_active' => 1],
            ['name' => 'Bangladesh', 'code' => 'bd', 'phone_code' => '+880', 'is_active' => 1],
            ['name' => 'Barbados', 'code' => 'bb', 'phone_code' => '+1246', 'is_active' => 1],
            ['name' => 'Belarus', 'code' => 'by', 'phone_code' => '+375', 'is_active' => 1],
            ['name' => 'Belgium', 'code' => 'be', 'phone_code' => '+32', 'is_active' => 1],
            ['name' => 'Belize', 'code' => 'bz', 'phone_code' => '+501', 'is_active' => 1],
            ['name' => 'Benin', 'code' => 'bj', 'phone_code' => '+229', 'is_active' => 1],
            ['name' => 'Bermuda', 'code' => 'bm', 'phone_code' => '+1441', 'is_active' => 1],
            ['name' => 'Bhutan', 'code' => 'bt', 'phone_code' => '+975', 'is_active' => 1],
            ['name' => 'Bolivia', 'code' => 'bo', 'phone_code' => '+591', 'is_active' => 1],
            ['name' => 'Bosnia and Herzegovina', 'code' => 'ba', 'phone_code' => '+387', 'is_active' => 1],
            ['name' => 'Botswana', 'code' => 'bw', 'phone_code' => '+267', 'is_active' => 1],
            ['name' => 'Bouvet Island', 'code' => 'bv', 'phone_code' => '', 'is_active' => 0],
            ['name' => 'Brazil', 'code' => 'br', 'phone_code' => '+55', 'is_active' => 1],
            ['name' => 'British Indian Ocean Territory', 'code' => 'io', 'phone_code' => '+246', 'is_active' => 0],
            ['name' => 'Brunei Darussalam', 'code' => 'bn', 'phone_code' => '+673', 'is_active' => 1],
            ['name' => 'Bulgaria', 'code' => 'bg', 'phone_code' => '+359', 'is_active' => 1],
            ['name' => 'Burkina Faso', 'code' => 'bf', 'phone_code' => '+226', 'is_active' => 1],
            ['name' => 'Burundi', 'code' => 'bi', 'phone_code' => '+257', 'is_active' => 1],
            ['name' => 'Cambodia', 'code' => 'kh', 'phone_code' => '+855', 'is_active' => 1],
            ['name' => 'Cameroon', 'code' => 'cm', 'phone_code' => '+237', 'is_active' => 1],
            ['name' => 'Canada', 'code' => 'ca', 'phone_code' => '+1', 'is_active' => 1],
            ['name' => 'Cape Verde', 'code' => 'cv', 'phone_code' => '+238', 'is_active' => 1],
            ['name' => 'Cayman Islands', 'code' => 'ky', 'phone_code' => '+1 345', 'is_active' => 1],
            ['name' => 'Central African Republic', 'code' => 'cf', 'phone_code' => '+236', 'is_active' => 1],
            ['name' => 'Chad', 'code' => 'td', 'phone_code' => '+235', 'is_active' => 1],
            ['name' => 'Chile', 'code' => 'cl', 'phone_code' => '+56', 'is_active' => 1],
            ['name' => 'Comoros', 'code' => 'km', 'phone_code' => '+269', 'is_active' => 1],
            ['name' => 'Djibouti', 'code' => 'dj', 'phone_code' => '+253', 'is_active' => 1],
            ['name' => 'Egypt', 'code' => 'eg', 'phone_code' => '+20', 'is_active' => 1],
            ['name' => 'Iraq', 'code' => 'iq', 'phone_code' => '+964', 'is_active' => 1],
            ['name' => 'Jordan', 'code' => 'jo', 'phone_code' => '+962', 'is_active' => 1],
            ['name' => 'Kuwait', 'code' => 'kw', 'phone_code' => '+965', 'is_active' => 1],
            ['name' => 'Lebanon', 'code' => 'lb', 'phone_code' => '+961', 'is_active' => 1],
            ['name' => 'Libya', 'code' => 'ly', 'phone_code' => '+218', 'is_active' => 1],
            ['name' => 'Mauritania', 'code' => 'mr', 'phone_code' => '+222', 'is_active' => 1],
            ['name' => 'Mauritius', 'code' => 'mu', 'phone_code' => '+230', 'is_active' => 1],
            ['name' => 'Morocco', 'code' => 'ma', 'phone_code' => '+212', 'is_active' => 1],
            ['name' => 'Oman', 'code' => 'om', 'phone_code' => '+968', 'is_active' => 1],
            ['name' => 'Palestine', 'code' => 'ps', 'phone_code' => '+970', 'is_active' => 1],
            ['name' => 'Qatar', 'code' => 'qa', 'phone_code' => '+974', 'is_active' => 1],
            ['name' => 'Saudi Arabia', 'code' => 'sa', 'phone_code' => '+966', 'is_active' => 1],
            ['name' => 'Somalia', 'code' => 'so', 'phone_code' => '+252', 'is_active' => 1],
            ['name' => 'Sudan', 'code' => 'sd', 'phone_code' => '+249', 'is_active' => 1],
            ['name' => 'Syria', 'code' => 'sy', 'phone_code' => '+963', 'is_active' => 1],
            ['name' => 'Tunisia', 'code' => 'tn', 'phone_code' => '+216', 'is_active' => 1],
            ['name' => 'United Arab Emirates', 'code' => 'ae', 'phone_code' => '+971', 'is_active' => 1],
            ['name' => 'Yemen', 'code' => 'ye', 'phone_code' => '+967', 'is_active' => 1],
        ];
        Country::create($countries);
    }
}
