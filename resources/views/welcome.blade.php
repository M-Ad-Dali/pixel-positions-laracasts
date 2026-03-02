<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <form action="">
                <input type="text" placeholder="Web Developer..." class="bg-white/5 rounded-xl px-5 py-3 w-full mt-6 focus:outline-none focus:ring-1 focus:ring-blue-800 focus:ring-offset-1 focus:ring-offset-black max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        </section>
        <x-section-heading>Tags Jobs</x-section-heading>
        <div class="mt-6 space-x-1 gap-2 flex flex-wrap">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
        <section>

        </section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <section>
            <div class="mt-6 space-y-6 mb-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
    </div>
</x-layout>
