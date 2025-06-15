<div class="max-w-7xl mx-auto">
    <!-- Top Controls -->
    <div class="flex flex-row justify-between mb-4 gap-4">
        <!-- Entries -->
        <div class="flex flex-row">
            <label class="text-sm text-gray-700">
                Show
                <select class="border border-gray-300 rounded px-2 py-1 text-sm">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                entries
            </label>
        </div>

        <!-- Actions + Search -->
        <div class="flex items-center gap-2">
            <button class="bg-blue-600 text-white text-sm px-3 py-1.5 rounded hover:bg-blue-700">Copy</button>
            <button class="bg-green-600 text-white text-sm px-3 py-1.5 rounded hover:bg-green-700">Excel</button>
            <button class="bg-red-600 text-white text-sm px-3 py-1.5 rounded hover:bg-red-700">PDF</button>
            <input type="text" placeholder="Search..."
                class="ml-2 border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto w-full bg-white shadow-md rounded-lg">
        <table class="w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-black text-black text-left">
                <tr>
                    <th class="px-4 py-2 font-medium">Name</th>
                    <th class="px-4 py-2 font-medium">Position</th>
                    <th class="px-4 py-2 font-medium">Office</th>
                    <th class="px-4 py-2 font-medium">Age</th>
                    <th class="px-4 py-2 font-medium">Start Date</th>
                    <th class="px-4 py-2 font-medium">Salary</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-black">
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">Tiger Nixon</td>
                    <td class="px-4 py-2">System Architect</td>
                    <td class="px-4 py-2">Edinburgh</td>
                    <td class="px-4 py-2">61</td>
                    <td class="px-4 py-2">2011/04/25</td>
                    <td class="px-4 py-2">$320,800</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">Garrett Winters</td>
                    <td class="px-4 py-2">Accountant</td>
                    <td class="px-4 py-2">Tokyo</td>
                    <td class="px-4 py-2">63</td>
                    <td class="px-4 py-2">2011/07/25</td>
                    <td class="px-4 py-2">$170,750</td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>

    <!-- Bottom: Info + Pagination -->
    <div class="flex flex-row justify-between mt-4 text-sm text-gray-600">
        <div class="mb-2 md:mb-0">
            Showing 1 to 10 of 57 entries
        </div>
        <div>
            <nav class="inline-flex items-center space-x-1">
                <button class="px-3 py-1 border rounded hover:bg-gray-200" disabled>Previous</button>
                <button class="px-3 py-1 border bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-200">2</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-200">3</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-200">Next</button>
            </nav>
        </div>
    </div>

</div>
