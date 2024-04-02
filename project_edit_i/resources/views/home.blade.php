@extends('layout')
@section('title')
@endsection
@section('content')
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <section class="py-1 bg-blueGray-50">
        <div class="m-5">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white ">

                {{-- head  --}}
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">
                                Companies
                            </h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="/editpage">
                                <button
                                class="bg-yellow-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">
                                Manage data
                            </button>
                            </a>
                           <a href="/listdata">
                            <button
                            class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button">
                            Add Data
                        </button>
                           </a>
                        </div>
                    </div>
                </div>


                {{-- header list  --}}

                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full border-collapse text-blueGray-700  ">
                        <thead class="thead-light ">
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    ชื่อบริษัท, อีเมล
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    เมือง, ประเทศ, โทรศัพท์
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    ที่อยู่, เว็บไซต์
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    คำอธิบาย
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    รายได้ (ต่อปี)
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    มูลค่าทั้งหมด
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                </th>
                            </tr>
                        </thead>


                        {{-- content  --}}

                        <tbody>

                            @foreach ($dataCompany as $key => $item)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>{{ $item->name }}</div>
                                    <div>{{ $item->email }}</div>
                                </th>

                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    <div>{{ $item->city }}</div>
                                    <div>{{ $item->country }}</div>
                                    <div style="color: black; font-weight:600">{{ $item->phone }}</div>
                                </td>

                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    <div>{{ $item->address }}</div>
                                    <div style="color: rgb(41, 167, 250)">{{ $item->website }}</div>
                                </td>

                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="word-wrap: break-word;">
                                   <div>{{ $item->description }}</div>
                                </td>
                                <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="word-wrap: break-word;">
                                   <div>{{ $item->income }}</div>
                               </td>

                                <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">{{$totalAssetsArray[$key]}}</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-green-200">
                                                <div style="width: {{$totalAssetsArray[$key]}}%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr> @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </section>
@endsection
