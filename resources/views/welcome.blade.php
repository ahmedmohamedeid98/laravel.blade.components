<x-layout>


    {{-- <x-flash class="mt-5" type="warning">
        Hello World.
    </x-flash>

    <x-flash class="mt-5" type="success">
        Hello World.
    </x-flash> --}}



    {{-- <x-modal title="Deactivate account" submit-label="Deactivate">
        <x-slot name="trigger">
            <button @click="on = true">Show Model</button>
        </x-slot>
        Are you sure you want to deactivate your account? All of your data will be permanently removed. This action
        cannot be undone.
    </x-modal> --}}





    {{-- <x-section>
        <div class="flex justify-end">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <button>Click My</button>
                </x-slot>
    
                <x-dropdown-item href="/">One</x-dropdown-item>
                <x-dropdown-item href="/">Two</x-dropdown-item>
                <x-dropdown-item href="/">Three</x-dropdown-item>
            </x-dropdown>
        </div>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione exercitationem asperiores debitis fuga
            nesciunt ut earum nulla, iste modi, consectetur animi expedita pariatur eos quo odio ea aperiam.
            Consectetur, fugit.
        </p>
    </x-section> --}}

    <x-section>
        <x-tabs active="First">
            <x-tab name="First">
                Conntent for first tab
            </x-tab>
            <x-tab name="Second">
                Content for second tab
            </x-tab>
            <x-tab name="Third">
                Content for third tab
            </x-tab>
        </x-tabs>
    </x-section>
</x-layout>