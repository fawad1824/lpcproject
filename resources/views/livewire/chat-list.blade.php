<div class="flex h-[90vh] bg-gray-100 dark:bg-gray-900">

    <!-- Sidebar (User List) -->
    <div class="w-full md:w-1/3 lg:w-1/4 bg-white border-r overflow-y-auto dark:bg-gray-900">
        <div class="px-4 py-3 border-b text-xl font-semibold text-gray-800">Chats</div>

        <!-- Search -->
        <div class="p-3">
            <input type="text" placeholder="Search..."
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-500 text-sm">
        </div>

        <!-- Users List -->
        <ul class="divide-y divide-gray-100">
            <li class="flex items-center px-4 py-3 hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=1" />
                <div class="ml-3 flex-1">
                    <div class="flex justify-between text-sm font-medium">
                        <span class="text-gray-800">Alice</span>
                        <span class="text-xs text-gray-400">2m</span>
                    </div>
                    <p class="text-xs text-gray-600 truncate">Hey! What's up?</p>
                </div>
            </li>
            <li class="flex items-center px-4 py-3 hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=2" />
                <div class="ml-3 flex-1">
                    <div class="flex justify-between text-sm font-medium">
                        <span class="text-gray-800">John</span>
                        <span class="text-xs text-gray-400">5m</span>
                    </div>
                    <p class="text-xs text-gray-600 truncate">Let's meet tomorrow.</p>
                </div>
            </li>
            <!-- Add more users -->
        </ul>
    </div>

    <!-- Chat Area -->
    <div class="hidden md:flex flex-col flex-1 bg-white">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3 border-b bg-white">
            <div class="flex items-center">
                <img class="w-10 h-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=1" />
                <div class="ml-3">
                    <p class="text-sm font-semibold text-gray-800">Alice</p>
                    <p class="text-xs text-gray-500">Online</p>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50">
            <!-- Received -->
            <div class="flex items-start">
                <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/100?img=1" />
                <div class="ml-2 max-w-xs bg-white rounded-lg px-3 py-2 shadow text-sm text-gray-800">
                    Hey! How are you doing?
                </div>
            </div>
            <!-- Sent -->
            <div class="flex justify-end">
                <div class="max-w-xs bg-blue-600 text-white rounded-lg px-3 py-2 shadow text-sm">
                    I'm doing great, thanks! And you?
                </div>
            </div>
            <!-- More messages... -->
        </div>

        <!-- Input -->
        <div class="p-3 border-t bg-white flex items-center">
            <input type="text" placeholder="Type a message..."
                class="flex-1 border border-gray-300 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-500">
            <button class="ml-3 bg-blue-600 text-white px-4 py-2 rounded-full text-sm hover:bg-blue-700">Send</button>
        </div>
    </div>
</div>
