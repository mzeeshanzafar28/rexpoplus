<div class="col-span-12 lg:col-span-4">
    <div class="card p-4 sm:p-5">
      <div class="flex items-center space-x-4">
        <div class="avatar h-14 w-14">
          <img
            class="rounded-full"
            src="{{ asset('uploads/'. Auth::user()->profile_pic) }}"
            alt="avatar"
          />
        </div>
        <div>
          <h3
            class="text-base font-medium text-slate-700 dark:text-navy-100"
          >
            {{ Auth::user()->name }}
          </h3>
          <p class="text-xs+">{{ Auth::user()->email }}</p>
        </div>
      </div>
      <ul class="mt-6 space-y-1.5 font-inter font-medium">
        <li>
          <a
            @if(Request::is('user/settings/account'))
            class="flex items-center space-x-2 rounded-lg bg-primary px-4 py-2.5 tracking-wide text-white outline-none transition-all dark:bg-accent"
            @else
            class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
            @endif
            href="{{ URL::to('user/settings/account') }}"
          >
            <ion-icon name="person-circle-outline" class="h-5 w-5"></ion-icon>
            <span>Account</span>
          </a>
        </li>
        <li>
          <a
            @if(Request::is('user/settings/security'))
            class="flex items-center space-x-2 rounded-lg bg-primary px-4 py-2.5 tracking-wide text-white outline-none transition-all dark:bg-accent"
            @else
            class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
            @endif
            href="{{ URL::to('user/settings/security') }}"
          >
            <ion-icon name="shield-checkmark-outline" class="h-5 w-5"></ion-icon>
            <span>Security</span>
          </a>
        </li>
      </ul>
    </div>
  </div>