<!-- Desktop Floating Actions -->
<div class="fixed right-0 top-1/2 -translate-y-1/2 z-50 hidden md:flex flex-col">

    <button onclick="openContact('call')"
        class="w-12 h-12 rounded-l-2xl bg-red-500 flex items-center justify-center shadow-lg">
        <img src="{{ asset('assets/icons/call (2).png') }}" class="w-5" />
    </button>

    <button onclick="openContact('whatsapp')"
        class="w-12 h-12 rounded-l-2xl bg-green-500 flex items-center justify-center shadow-lg">
        <img src="{{ asset('assets/icons/whatsapp (2).png') }}" class="w-5" />
    </button>
</div>

<!-- Mobile Action Bar -->
<div class="fixed bottom-0 left-1/2 z-40 flex -translate-x-1/2 items-center gap-3
            bg-white px-4 py-3 shadow-xl md:hidden w-full justify-center">

    <a href="https://nanohospitals.karexpert.com/account-management/login"
       class="flex items-center gap-2 rounded-full border border-red-400
              bg-red-50 px-6 py-2 text-sm font-medium text-red-500">
        <img src="{{ asset('assets/icons/calendar.png') }}" class="w-4" />
        Book An Appointment
    </a>

    <button onclick="openContact('call')"
        class="h-11 w-11 rounded-full bg-red-500 flex items-center justify-center shadow-md">
        <img src="{{ asset('assets/icons/call (2).png') }}" class="w-5" />
    </button>

    <button onclick="openContact('whatsapp')"
        class="h-11 w-11 rounded-full bg-green-500 flex items-center justify-center shadow-md">
        <img src="{{ asset('assets/icons/whatsapp (2).png') }}" class="w-5" />
    </button>
</div>

<!-- Contact Modal -->
<div id="contactModal"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">

    <div class="w-[92%] max-w-md rounded-2xl bg-white overflow-hidden">

        <a id="item1" class="flex items-center justify-between px-5 py-4 border-b hover:bg-gray-50">
            <div class="flex items-center gap-4">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                    <img id="icon1" class="w-4" />
                </div>
                <div>
                    <p id="label1" class="text-sm text-gray-500"></p>
                    <p id="value1" class="text-sm font-medium text-red-500"></p>
                </div>
            </div>
            <span class="text-red-400 text-xl">›</span>
        </a>

        <a id="item2" class="flex items-center justify-between px-5 py-4 hover:bg-gray-50">
            <div class="flex items-center gap-4">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                    <img id="icon2" class="w-4" />
                </div>
                <div>
                    <p id="label2" class="text-sm text-gray-500"></p>
                    <p id="value2" class="text-sm font-medium text-red-500"></p>
                </div>
            </div>
            <span class="text-red-400 text-xl">›</span>
        </a>

    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('contactModal');

    window.openContact = function(type) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        if (type === 'call') {
            setItem(
                'Uttarahalli Number',
                '+91 87672 00300',
                'tel:+918767200300',
                '{{ asset('assets/icons/model-call.png') }}',
                'Hulimavu Number',
                '+91 89295 00500',
                'tel:+918929500500'
            );
        }

        if (type === 'whatsapp') {
            setItem(
                'Uttarahalli WhatsApp',
                '+91 87672 00300',
                'https://wa.me/918767200300?text=Hi',
                '{{ asset('assets/icons/model-whatsapp.png') }}',
                'Hulimavu WhatsApp',
                '+91 89295 00500',
                'https://wa.me/918929500500?text=Hi'
            );
        }
    }

    function setItem(l1, v1, h1, i, l2, v2, h2) {
        document.getElementById('label1').innerText = l1;
        document.getElementById('value1').innerText = v1;
        document.getElementById('item1').href = h1;
        document.getElementById('icon1').src = i;

        document.getElementById('label2').innerText = l2;
        document.getElementById('value2').innerText = v2;
        document.getElementById('item2').href = h2;
        document.getElementById('icon2').src = i;
    }

    modal.addEventListener('click', e => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });
});
</script>
@endpush
@endonce
