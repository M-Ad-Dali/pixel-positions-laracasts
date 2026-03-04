<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            {{-- <form action="">
                <input type="text" placeholder="Web Developer..." class="bg-white/5 rounded-xl px-5 py-3 w-full mt-6 focus:outline-none focus:ring-1 focus:ring-blue-800 focus:ring-offset-1 focus:ring-offset-black max-w-xl">
            </form> --}}

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer ... " />
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        </section>
        <x-section-heading>Tags Jobs</x-section-heading>
        <div class="mt-6 space-x-1 gap-2 flex flex-wrap">
            @foreach ($tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        <section>

        </section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <section>
            <div class="mt-6 space-y-6 mb-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
    </div>
</x-layout>
