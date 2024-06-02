<div>
    <h1>Patients</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $event }}">
        Create Patient
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $event1 }}">
        Patient Vitals
    </button>
    <x-modal :modalTitle="$title" :eventName="$event">
        {{-- <livewire:create-patient /> --}}
        @livewire('create-patient')
    </x-modal>
    <x-modal :modalTitle="$title1" :eventName="$event1">
        <livewire:create-patient-vitals />
    </x-modal>
    <x-custom.test :titleTest="'This is prop title'" :bgColor="'bg-danger'">
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
    </x-custom.test>
</div>
