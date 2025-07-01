@php
    $setting = \App\Models\SiteSetting::first();
@endphp

<footer class="bg-gray-800 text-white mt-10">
    <div class="container mx-auto px-4 py-8 grid lg:grid-cols-3 gap-8 text-sm text-center">
        <!-- Kolom 1: Nama Situs -->
        <div>
            <h3 class="text-xl font-bold mb-2">{{ optional($setting)->site_name ?? 'SEA-Catering' }}</h3>
        </div>

        <!-- Kolom 2: Informasi Kontak -->
        <div>
            <h4 class="font-semibold mt-4 mb-2">Contact details:</h4>
            <div class="grid justify-center items-center gap-2">
                <span>Manager: Brian </span>
                <span>Phone Number: 08123456789 </span>
            </div>
        </div>

        <!-- Kolom 3: Navigasi Akun -->
        <div>
            <h4 class="font-semibold mb-2">Account</h4>
            <ul class="space-y-1">
                <li><a href="{{ route('profile') }}" class="hover:underline">My Account</a></li>
                <li><a href="{{ route('cart') }}" class="hover:underline">Cart</a></li>
                <li><a href="" class="hover:underline">Shop</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-4 border-t border-gray-700 mt-6">
        <p class="text-xs">{{ optional($setting)->copyright }}</p>
    </div>
</footer>
