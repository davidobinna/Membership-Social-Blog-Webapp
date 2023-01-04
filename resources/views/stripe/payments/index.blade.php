<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Checkout</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="flex flex-col items-center max-w-4xl mx-auto">
            <div class="w-full p-10 m-4 leading-loose border border-gray-200 shadow-lg bg-gray-50">
                {{---Payment Form ---}}
                <form id="payment-form" class="space-y-8" action="{{ route('payments.store') }}" method="POST">
                   @csrf
                    <h2 class="relative font-serif text-xl font-bold">
                        <span class="side-title">
                            Customer information
                        </span>
                    </h2>
                     @if (Session::has('error'))
                     <div class="alert alert-danger">
                        {{ Session::get('error') }}
                     </div>
                     @endif
                    {{--- Plan  ---}}
                    <input type="hidden" name="plan" id="plan" value="{{ request('plan') }}">

                    {{--- Payment method ---}}
                    <input type="hidden" name="payment-method" id="payment-method">

                    {{-- Name --}}
                    <div class="space-y-2">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="auth()->user()->name() ?? old('name')" autocomplete="name" />
                    </div>

                    {{-- Email --}}
                    <div class="space-y-2">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="text" name="email" :value="auth()->user()->emailAddress() ?? old('email')"  autocomplete="email" disabled/>
                    </div>

                    {{-- Address line 1 --}}
                    <div class="space-y-2">
                        <x-jet-label for="line1" value="{{ __('Street, PO Box, or Company name') }}" />
                        <x-jet-input id="line1" class="block w-full mt-1" type="text" name="line1" :value="auth()->user()->lineOne() ?? old('line1')" />
                    </div>

                    {{-- Address  line 2--}}
                    <div class="space-y-2">
                        <x-jet-label for="line2" value="{{ __('apartment, suite, unit, or building') }}" />
                        <x-jet-input id="line2" class="block w-full mt-1" type="text" name="line2" :value="auth()->user()->lineTwo() ?? old('line2')" />
                    </div>

                    <div class="space-y-2">
                        <x-jet-label for="city" value="{{ __('City') }}" />
                        <x-jet-input id="city" class="block w-full mt-1" type="text" name="city" :value="auth()->user()->city() ?? old('city')"  autocomplete="city" />
                    </div>

                    <div class="inline-block w-1/2 pr-2 ">
                        <x-jet-label for="state" value="{{ __('State') }}" />
                        <x-jet-input id="state" class="block w-full mt-1" type="text" name="state" :value="auth()->user()->state() ?? old('state')" autocomplete="state" />
                    </div>

                    <div class="inline-block w-1/2 pr-2 ">
                        <x-jet-label for="country" value="{{ __('Country') }}" />
                        <x-jet-input id="country" class="block w-full mt-1" type="text" name="country" :value="auth()->user()->country() ?? old('country')" autocomplete="country" />
                    </div>

                    <div class="inline-block w-1/2 pl-2 -mx-1">
                        <x-jet-label for="postal_code" value="{{ __('Postal Code / Zip') }}" />
                        <x-jet-input id="postal_code" class="block w-full mt-1" type="text" name="postal_code" :value="auth()->user()->postalCode() ?? old('postal_code')" autocomplete="postal_code" />
                    </div>

                    <h2 class="relative font-serif text-xl font-bold">
                        <span class="side-title">
                            Payment information
                        </span>
                    </h2>
                       {{--Name on Card--}}
                    <div class="space-y-2">
                        <x-jet-label for="name-card" value="{{ __('Name') }}" />
                        <x-jet-input id="card-holder-name" class="block w-full mt-1" type="text" name="name" :value="auth()->user()->name() ?? old('name-card')" autocomplete="name" />
                    </div>


                    <div class="space-y-2">
                        <x-jet-label for="card_no" value="{{ __('Card Information') }}" />
                        <div id="card-element" class="p-2 bg-white border-gray-300 rounded"></div>
                    </div>

                    <div id="card-errors" class="space-y-2 text-red-500"></div>

                    <div class="space-y-2">
                        <button id="card-button" data-secret="{{ $intent->client_secret }}" class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">
                            Pay Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@push('scripts')
    <script src="https://js.stripe.com/v3"></script>

    <script>
       const stripe = stripe('{{ env("STRIPE_KEY") }}');

       const elements = stripe.elements();
       const cardElements = elements.create('card');

       const cardHoldername = document.getElementById('card-holder-name');
       const cardButton = document.getElementById('card-button')
       const clientSecret = cardButton.dataset.secret;

       cardElements.mount('#card-element');

       cardElements.addEventListener('change', function (e) {
          const displayError = document.getElementById('card-errors');
           if (event.errors) {
              displayError.textContent = event.errormessages;
           } else {
              displayError.textContent = '';
           }
       });
         // Handle Form Submission
      const paymentForm = document.getElementById('payment-form');

      paymentForm.addEventListener('submit', function (event){
         event.preventDefault();
      });

    </script>
@endpush
</x-guest-layout>
