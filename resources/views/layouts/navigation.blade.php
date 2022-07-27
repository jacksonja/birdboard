<nav class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="container mx-auto">
        <div class="flex justify-between items-center py-2">
            <h1>
                <a href="{{ route('dashboard') }}">
                    <img src="/images/logo.svg" alt="Birdboard">
                </a>
            </h1>

            <div>
                <div>{{ Auth::user()->name }}</div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>
</nav>
