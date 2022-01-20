<div>
    <style>
        .filter-white{
            filter: invert(100%) sepia(0%) saturate(7491%) hue-rotate(126deg) brightness(102%) contrast(104%);
        }
    </style>
    <div>
        <style>
            /* Set a fixed scrollable wrapper */
            .tableWrap {
                height: 500px;

                overflow: auto;
            }

            /* Set header to stick to the top of the container. */
            thead tr th {
                position: sticky;
                top: 0;
            }

            /* If we use border,
            we must use table-collapse to avoid
            a slight movement of the header row */
            table {
                border-collapse: collapse;
                --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);

            }

            /* Because we must set sticky on th,
             we have to apply background styles here
             rather than on thead */
            th {
                padding: 16px 16px 16px 15px;
                border-left: 1px dotted rgba(200, 209, 224, 0.6);
                border-bottom: 1px solid #e8e8e8;
                background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
                text-align: left;
                /* With border-collapse, we must use box-shadow or psuedo elements
                for the header borders */
                box-shadow: 0 0 0 2px #e8e8e8;
            }

        </style>

        <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Data Admin') }}
        </h1>
        <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
            <div class="col-span-5 lg:col-span-2">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="ml-5 hidden lg:flow-root">

                </div>
                <!--Mobile Navigation -->
                <div class="

            content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
                    <div
                        class="   @if($page=="students")
                            ring-blue-900 ring-2
@endif
                            relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                        <div class="sm:flex-shrink-0">
                            <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

                        </div>
                        <div class="sm:flex-1   min-w-0">
                            <button wire:click="setPage('students')"  class="
                        text-center md:text-left focus:outline-none
                        ">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-bold text-gray-900">
                                    Students
                                </p>
                                <p class="text-sm hidden md:block text-gray-500 break-words">
                                    Lihat Data
                                </p>
                            </button>

                        </div>
                    </div>
                    <!-- More people... -->
                </div>

                <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_ticket_transactions")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_ticket_transactions')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                   Ticket Transactions
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
                </div>

                <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_logs")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_logs')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Logs
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
      <div class="

            content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
                    <div
                        class="   @if($page=="fis8_categories")
                            ring-blue-900 ring-2
@endif
                            relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                        <div class="sm:flex-shrink-0">
                            <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

                        </div>
                        <div class="sm:flex-1   min-w-0">
                            <button wire:click="setPage('fis8_categories')"  class="
                        text-center md:text-left focus:outline-none
                        ">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-bold text-gray-900">
                                    Categories
                                </p>
                                <p class="text-sm hidden md:block text-gray-500 break-words">
                                    Lihat Data
                                </p>
                            </button>

                        </div>
                    </div>
                    <!-- More people... -->
                </div>
                <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_levels")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_levels')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Levels
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
    <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_questions")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_questions')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Questions
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
    <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_answer_options")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_answer_options')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Answer Options
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>

    <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_question_answers")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_question_answers')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Question Answer
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
    <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_game_play_histories")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_game_play_histories')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        Game Play Histories
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
    <div class="

content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
        <div
            class="   @if($page=="fis8_user_answers")
                ring-blue-900 ring-2
@endif
                relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
            <div class="sm:flex-shrink-0">
                <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src=""></div>

            </div>
            <div class="sm:flex-1   min-w-0">
                <button wire:click="setPage('fis8_user_answers')"  class="
            text-center md:text-left focus:outline-none
            ">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-bold text-gray-900">
                        User Answers
                    </p>
                    <p class="text-sm hidden md:block text-gray-500 break-words">
                        Lihat Data
                    </p>
                </button>

            </div>
        </div>
        <!-- More people... -->
    </div>
        <!-- More people... -->
    </div>

            </div>
            @if($page == 'students')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
            <button type="button" class="btn btn-danger d-block mx-auto mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data</button>

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           EMAIL
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            USERNAME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           SCHOOL
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           REAL NAME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           IS ACTIVE
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            IS ADMIN
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          CITY
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          BIRTHYEAR
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          TICKET
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          SCORE
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         MONEY
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataUser as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['email']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.email">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['username']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.username">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['school']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.school">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['name']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.name">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['my_user']['is_active']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.is_active">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['my_user']['is_admin']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.is_admin">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{ $product['city'] }}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.city">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['birthyear']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.birthyear">
@endif  
</td>
<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['my_user']['ticket']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.ticket">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['my_user']['score']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.score">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['my_user']['money']}}
@else
<input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.money">
@endif
</td>
<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>
<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>

        @elseif($page == "fis8_ticket_transactions")
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           STUDENT ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            SUM TICKET
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           CREATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataTicketTransaction as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
{{$product['student']['id']}}
</td>

<td class="text-center">
{{$product['add_ticket']}}
</td>

<td class="text-center">
{{$product['created_at']}}
</td>

<td class="text-center">
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>
@elseif($page == "fis8_logs")
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           STUDENT ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            TABLE NAME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            LOG NOTE
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            LOG DESCRIPTION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            LOG PATH
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            LOG IP
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           CREATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataLogs as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
{{$product['student']['id']}}
</td>

<td class="text-center">
{{$product['table_name']}}
</td>

<td class="text-center">
{{$product['log_note']}}
</td>
<td class="text-center">
{{$product['log_description']}}
</td>
<td class="text-center">
{{$product['log_path']}}
</td>
<td class="text-center">
{{$product['log_ip']}}
</td>
<td class="text-center">
{{$product['created_at']}}
</td>

<td class="text-center">
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>
@elseif($page == 'fis8_categories')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           NAME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            DESCRIPTION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataCategories as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['name']}}
@else
<input type="text" wire:model.defer="AdminDataCategories.{{$index}}.name">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['description']}}
@else
<input type="text" wire:model.defer="AdminDataCategories.{{$index}}.description">
@endif
</td>

<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>
<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>

@elseif($page == 'fis8_levels')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           CATEGORY ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            NAME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         THUMBNAIL
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         DESCRIPTION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            SCORE REWARD
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         TICKET REWARD
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         MONEY REWARD
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            MAXIMUM TIME
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataLevels as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['category']['id']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.category.id">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['name']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.name">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['thumbnail']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.thumbnail">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['description']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.description">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['score_reward']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.score_reward">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['ticket_reward']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.ticket_reward">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['money_reward']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.money_reward">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['maximum_time']}}
@else
<input type="text" wire:model.defer="AdminDataLevels.{{$index}}.maximum_time">
@endif
</td>

<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>


@elseif($page == 'fis8_questions')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           LEVEL ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            QUESTION TEXT
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CORRECT ANSWER OPTION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         DISCUSSION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataQuestions as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['level']['id']}}
@else
<input type="text" wire:model.defer="AdminDataQuestions.{{$index}}.level.id">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['question_text']}}
@else
<input type="text" wire:model.defer="AdminDataQuestions.{{$index}}.question_text">
@endif
</td>

<td class="text-center">
{{$product['correct_answer_option']}}
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['discussion']}}
@else
<input type="text" wire:model.defer="AdminDataQuestions.{{$index}}.discussion">
@endif
</td>

<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>

@elseif($page == 'fis8_answer_options')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           OPTION TEXT
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            IS IMAGE
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataAnswerOptions as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['option_text']}}
@else
<input type="text" wire:model.defer="AdminDataAnswerOptions.{{$index}}.option_text">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['is_image']}}
@else
<input type="text" wire:model.defer="AdminDataAnswerOptions.{{$index}}.is_image">
@endif
</td>

<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>

@elseif($page == 'fis8_question_answers')
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           QUESTION ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ANSWER OPTION ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            OPTION
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         CREATED
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         UPDATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataQuestionAnswers as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['fis8_question_id']}}
@else
<input type="text" wire:model.defer="AdminDataQuestionAnswers.{{$index}}.fis8_question_id">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['fis8_answer_option_id']}}
@else
<input type="text" wire:model.defer="AdminDataQuestionAnswers.{{$index}}.fis8_answer_option_id">
@endif
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
{{$product['option']}}
@else
<input type="text" wire:model.defer="AdminDataQuestionAnswers.{{$index}}.option">
@endif
</td>

<td class="text-center">
{{$product['created_at']}}
</td>
<td class="text-center">
{{$product['updated_at']}}
</td>

<td class="text-center">
@if($editAdminDataIndex !== $index)
<button wire:click.prevent="editAdminData({{$index}})">Ubah</button>
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
@else
<button wire:click.prevent="saveAdminData({{$index}})">Simpan</button>
@endif
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>

@elseif($page == "fis8_game_play_histories")
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           STUDENT ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            LEVEL ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           SCORE
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           MONEY REWARD
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            TICKET REWARD
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           SUM CORRECT ANSWER
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           CREATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataGamePlayHistories as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
{{$product['student_id']}}
</td>

<td class="text-center">
{{$product['fis8_level_id']}}
</td>
<td class="text-center">
{{$product['score']}}
</td>

<td class="text-center">
{{$product['money_reward']}}
</td>
<td class="text-center">
{{$product['ticket_reward']}}
</td>

<td class="text-center">
    @if($product['sum_correct_answer']!=null)
{{$product['sum_correct_answer']}}
@else
-
@endif
</td>
<td class="text-center">
{{$product['created_at']}}
</td>

<td class="text-center">
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>


@elseif($page == "fis8_user_answers")
            <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           QUESTION ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            GAME PLAY HISTORY ID
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           USER ANSWER
        </th>
        <th scope="col"
            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
           CREATED
        </th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach($AdminDataUserAnswers as $index => $product)
    <tr>
<td> {{$product['id']}}</td>

<td class="text-center">
{{$product['fis8_question_id']}}
</td>

<td class="text-center">
{{$product['fis8_game_play_history_id']}}
</td>
<td class="text-center">
{{$product['user_answer']}}
</td>

<td class="text-center">
{{$product['created_at']}}
</td>

<td class="text-center">
<button wire:click.prevent="deleteAdminData({{$index}})">Delete</button>
</td>
</tr>
@endforeach
    <!-- More people... -->
    </tbody>
</table>
        @endif
    </div>
    </div>

    <!--MODAL ALL -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
         
        <h5 class="modal-title">
        @if($page=="students")    
        Add Student @endif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      @if($page=="students")
                    <div class="form-group">
                        <label>Email : </label>
                        <input type="email" class="form-control" wire:model="email" required>
                    </div>

                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" class="form-control" wire:model="password" required>
                    </div>

                    <div class="form-group">
                    <label>Konfirmasi Password :</label>
                        <input type="password" class="form-control" wire:model="password_confirmation" required>
                    </div>

                    <div class="form-group">
                    <label>Username :</label>
                        <input type="text" class="form-control" wire:model="username" required>
                    </div>

                    <div class="form-group">
                    <label>Name :</label>
                        <input type="text" class="form-control" wire:model="name" required>
                    </div>

                    <div class="form-group">
                    <label>School :</label>
                        <input type="text" class="form-control" wire:model="school" required>
                    </div>

                    <div class="form-group">
                    <label>City :</label>
                        <input type="text" class="form-control" wire:model="city" required>
                    </div>

                    <div class="form-group">
                    <label>Birthyear :</label>
                        <input type="text" class="form-control" wire:model="birthyear" required>
                    </div>

                    <div class="form-group">
                    <label>Photo :</label>
                        <input type="text" class="form-control" wire:model="photo">
                    </div>

                    <div class="form-group">
                    <label>Is Admin :</label>
                        <input type="text" class="form-control" wire:model="is_admin" required>
                    </div>
        @elseif($page=="fis8_categories")
        <div class="form-group">
                        <label>Name : </label>
                        <input type="text" class="form-control" wire:model="name" required>
                    </div>

                    <div class="form-group">
                        <label>Description :</label>
                        <input type="text" class="form-control" wire:model="description" required>
                    </div>

        @elseif($page=="fis8_levels")
        <div class="form-group">
                        <label>Category : </label>
                        <input type="text" class="form-control" wire:model="fis8_category_id" required>
                    </div>

                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control" wire:model="name" required>
                    </div>
                    <div class="form-group">
                        <label>Thumbnail :</label>
                        <input type="text" class="form-control" wire:model="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <input type="text" class="form-control" wire:model="description" required>
                    </div>
                    <div class="form-group">
                        <label>Score Reward :</label>
                        <input type="text" class="form-control" wire:model="score_reward" required>
                    </div>
                    <div class="form-group">
                        <label>Ticket Reward :</label>
                        <input type="text" class="form-control" wire:model="ticket_reward" required>
                    </div>
                    <div class="form-group">
                        <label>Money Reward :</label>
                        <input type="text" class="form-control" wire:model="money_reward" required>
                    </div>
                    <div class="form-group">
                        <label>Maximum Time :</label>
                        <input type="text" class="form-control" wire:model="maximum_time" required>
                    </div>
                    @elseif($page=="fis8_questions")
        <div class="form-group">
                        <label>Level : </label>
                        <input type="text" class="form-control" wire:model="fis8_level_id" required>
                    </div>

                    <div class="form-group">
                        <label>Question Text :</label>
                        <input type="text" class="form-control" wire:model="question_text" required>
                    </div>
                    <div class="form-group">
                        <label>Correct Answer Option :</label>
                        <input type="text" class="form-control" wire:model="correct_answer_option" required>
                    </div>
                    <div class="form-group">
                        <label>Discussion :</label>
                        <input type="text" class="form-control" wire:model="discussion" required>
                    </div>
                    @elseif($page=="fis8_answer_options")
        <div class="form-group">
                        <label>Option Text : </label>
                        <input type="text" class="form-control" wire:model="option_text" required>
                    </div>

                    <div class="form-group">
                        <label>Is Image :</label>
                        <input type="text" class="form-control" wire:model="is_image" required>
                    </div>
                    @elseif($page=="fis8_question_answers")
        <div class="form-group">
                        <label>Question : </label>
                        <input type="text" class="form-control" wire:model="fis8_question_id" required>
                    </div>

                    <div class="form-group">
                        <label>Answer Option :</label>
                        <input type="text" class="form-control" wire:model="fis8_answer_option_id" required>
                    </div>

                    <div class="form-group">
                        <label>Option :</label>
                        <input type="text" class="form-control" wire:model="option" required>
                    </div>
         @endif

      </div>
      <div class="modal-footer">
      <button wire:click.prevent="addAdminData">Tambahkan</button>
        </div>
    </div>
  </div>
</div>

</div>
