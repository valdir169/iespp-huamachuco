<div class=" w-full table-cont">
    <table class="w-full mb-8">
        <thead>
            <tr>
                <th class="bg-[#3477DB] text-white !font-black">Docente</th>
                <th class="bg-[#3477DB] text-white !font-black">Unidad Didáctica</th>
                <th class="bg-[#3477DB] text-white !font-black">CV</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th class="w-6/12">{{ $teacher['name'] }}</th>
                    <th class="w-6/12 !text-start !pl-[15px]">
                        @foreach ($teacher['units'] as $unit)
                            - {{ $unit }} <br>
                        @endforeach
                    </th>
                    <th class="w-6/12">
                        <a class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff]
                        focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
                        hover:text-black hover:border-[#3477DB] hover:border
                         py-2.5 text-center no-underline lg:max-w-full xl:max-w-[300px] px-10
                           mb-2 hover:shadow-lg transition-all duration-200 ease-in-out
                            gap-x-2 opacity-90 hover:opacity-100"
                            type="secondary" href="{{ $teacher['cv'] }}" target="_blank">Ver</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
