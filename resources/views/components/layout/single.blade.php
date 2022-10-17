<div class="flex justify-center">
    <div class="max-w-screen-sm w-full">
        @auth
        <span class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />  
        </svg></span><?php $user = Auth::user(); ?>{{ $user->name }} 
        
            
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <div class="flex justify-end p-4">
                <button
                    class="mt-2 text-sm text-gray-500 hover:text-gray-800"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
            </div>
        </form>
        @endauth

        {{ $slot }}
    </div>
</div>