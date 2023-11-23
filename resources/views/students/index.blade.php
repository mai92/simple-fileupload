<x-app-layout>
    <div class="container mx-auto">
        <div class="text-right">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($students as $student)
                <div class="card bg-base-100 shadow-xl">

                    <div class="card-body">
                        <img src="{{ asset('storage/' . $student->photo) }}" class="avatar h-32 w-32 rounded-full"
                            alt="" />
                        <h2 class="card-title">{{ $student->name }}</h2>
                        <p>{{ $student->class }}</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
