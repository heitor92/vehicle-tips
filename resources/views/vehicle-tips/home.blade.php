<x-vehicle-tips.layout :title="$title">
    <x-vehicle-tips.layout.header :name="$name" :user="$user">
        <x-user.modals.login/>
        <x-user.modals.sign-up/>
    </x-vehicle-tips.layout.header>
    
    <x-vehicle-tips.layout.main>
        <x-vehicle-tips.forms.search :user="$user" :arTypeVehicle="$arTypeVehicle"/>
        <x-vehicle-tips.tables.list-tips :user="$user"/>
        <x-vehicle-tips.modals.upsert :user="$user" :arTypeVehicle="$arTypeVehicle"/>
        <x-vehicle-tips.modals.display/>
        <x-vehicle-tips.modals.delete/>
    </x-vehicle-tips.layout.main>

    <x-vehicle-tips.layout.footer/>
</x-vehicle-tips.layout>