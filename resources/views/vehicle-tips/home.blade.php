<x-vehicle-tips.layout :title="$title">
    <x-vehicle-tips.layout.header :name="$name">
        <x-user.modals.login/>
        <x-user.modals.sign-up/>
    </x-vehicle-tips.layout.header>

    <x-vehicle-tips.layout.main>
        <x-vehicle-tips.forms.search/>
        <x-vehicle-tips.tables.list-tips/>
        <x-vehicle-tips.modals.upsert/>
        <x-vehicle-tips.modals.display/>
        <x-vehicle-tips.modals.delete/>
    </x-vehicle-tips.layout.main>

    <x-vehicle-tips.layout.footer/>
</x-vehicle-tips.layout>