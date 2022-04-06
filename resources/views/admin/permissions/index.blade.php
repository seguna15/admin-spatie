<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
               <div class="flex justify-end p-2">
                    <a href="{{  route('admin.permissions.create') }}" class="px-4 py-2 text-white bg-green-700 hover:bg-green-500  rounded-md">Create Permission</a>
                </div>
                <div class="flex flex-col">
                    
                    <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="bg-gray-100 dark:bg-gray-900">
                                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                    <th class="px-6 py-4  font-normal text-left">Name</th>
                                    <th class="px-6 py-4  font-normal text-center">Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody class="w-full">
                                @foreach ($permissions as $permission)
                                    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                                        <td class="px-6 py-4 cursor-pointer">       
                                            <div class="flex items-center">
                                                {{ $permission->name }}
                                            </div>
                                           
                                        </td>
                                        
                                        <td class="px-6 py-4  text-center text-sm font-medium" >
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                               
                               
                            </tbody>
                        </table>
                    </div>
                </div>
      
      
    
            </div>
        </div>
    </div>
</x-admin-layout>

