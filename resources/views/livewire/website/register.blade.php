<div>
    <section id="hero_sec" class="hero_sec sign-body">
        <div class="container ">
            <div class="bg-transparent sign-box">
                <!-- <h3 class="text-white fw-bold mb-2">Sign In</h3>
          <p class="some-text">Sign in to your account to continue</p> -->
                <form action="" class="form" x-data="{ agree: false }" wire:submit.prevent="register">
                    <div class="sub-heading mb-5">
                        <h3 class="text-white fw-bold mb-2">Sign Up</h3>
                        <p class="some-text">Enter your details to create an account.</p>
                    </div>
                    <fieldset class="mb-3">
                        <label for="name">Name <span class="text-red-400">*</span></label>
                        <input wire:model="name" type="text" name="name" id="name" required />
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>
                    <fieldset class="mb-3">
                        <label for="email">Email address <span class="text-red-400">*</span></label>
                        <input wire:model="email" type="email" name="email" id="email" required />
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>
                    <fieldset class="mb-3">
                        <label for="password">Password <span class="text-red-400">*</span></label>
                        <input wire:model="password" type="password" name="password" id="password" required />
                        @error('password')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>
                    <fieldset class="mb-3">
                        <label for="password">Comfirm password <span class="text-red-400">*</span></label>
                        <input wire:model="confirm_password" type="password" name="text" id="text" required />
                        @error('confirm_password')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>
                    <div class="mb-3 form-check">
                        <input x-model="agree" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-white" for="exampleCheck1">I agree to the <a
                                href="/terms-of-use" class="text-blue-600 underline">terms of service</a></label>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn btn-effect-1 flex! items-center gap-2 cursor-pointer disabled:bg-gray-400! disabled:text-gray-500! disabled:border-transparent!" x-bind:disabled="!agree">Sign Up
                            <img wire:loading.remove wire:target="register" class="" :class="!agree ? '' : 'grayscale'" src="assets/images/icons/power.svg" alt="">
<span wire:loading wire:target="register" class="flex items-center gap-2">
                                
                                <svg class="animate-spin h-4 w-4 text-white" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                            </span>
                        </button>
                       

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- call to action section start -->
    @livewire('website.components.footer-c-t-a-section')
    <!-- call to action section end -->
</div>
