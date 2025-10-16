{{-- TODO: use named routes --}}
<div class="md:mt-8 lg:mt-16">
  <!-- Mobile Navigation -->
  <div class="md:hidden">
    <div class="flex justify-between items-center p-4 bg-primary">
      <a href="{{ route('home') }}" class="flex items-center gap-3">
        <img src="/images/cloud-native-community-groups.svg" alt="Cloud Native Mauritius" class="h-16 w-16 rounded-sm" />
        <div class="font-medium uppercase text-gray-50">
          <p>Cloud Native</p>
          <p>Community Groups</p>
          <p>Mauritius</p>
        </div>
      </a>
      <button id="mobile-menu-button" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <div id="mobile-menu" class="fixed inset-0 bg-gray-900 bg-opacity-95 z-50 hidden">
      <div class="flex flex-col items-center justify-center h-full">
        <button for="mobile-menu-checkbox" id="close-menu" class="absolute top-10 right-4 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <nav class="flex flex-col space-y-6">
          <a href="{{ route('home') }}"
            class="px-10 text-center py-3 bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Home</a>
          <a href="/our-chapter"
            class="px-10 text-center py-3 bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Our
            chapter</a>
          <a href="/our-sponsors"
            class="px-10 py-3 text-center bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Our
            sponsors</a>
          <a href="/cncf"
            class="px-10 py-3 text-center bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">CNCF</a>
          <a href="{{ route('blog') }}"
            class="px-10 py-3 text-center bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Blog</a>
          <a href="{{ route('cfps.create') }}"
            class="px-10 py-3 text-center bg-gray-600 text-slate-100 rounded-md text-sm font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">CFP</a>
          <a href="https://t.me/+E_G1XIVXTWMzYjU0" target="_blank" class="flex justify-center">
            <svg class="h-10 fill-gray-100 hover:fill-accent hover:outline hover:outline-gray-800 rounded-full transition ease-in-out duration-300"
              role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Telegram</title>
              <path
                d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
            </svg>
          </a>
          <a href="https://matrix.to/#/#cloudnativemu:matrix.meetup.mu" target="_blank" class="flex justify-center">
            <svg class="h-10 fill-gray-100 hover:fill-accent hover:outline hover:outline-gray-800 rounded-full transition ease-in-out duration-300"
              role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Matrix</title>
              <path
                d="M.632.55v22.9H2.28v.55h-.79A1.5 1.5 0 0 1 0 22.5V1.5A1.5 1.5 0 0 1 1.5 0h.79v.55H.632Zm22.736 0v22.9h1.648v.55h-.79A1.5 1.5 0 0 1 22.72 22.5V1.5A1.5 1.5 0 0 1 24 0h.79v.55h-1.422ZM4.415 12.3c0-1.398.543-2.5 1.63-3.3.955-.7 2.18-1.05 3.665-1.05.792 0 1.476.07 2.05.21v1.35a6.9 6.9 0 0 0-1.97-.3c-1.16 0-2.075.27-2.745.8-.68.54-1.02 1.28-1.02 2.22 0 .94.32 1.68.97 2.21.65.53 1.55.8 2.69.8.783 0 1.515-.1 2.195-.3v1.32c-.682.16-1.422.24-2.22.24-1.51 0-2.74-.35-3.7-1.05-1.078-.8-1.645-1.93-1.645-3.39Zm13.245-4.02h1.17v8.43h-1.17V13.8h-.04c-.52 1.1-1.56 1.65-3.12 1.65-1.16 0-2.06-.35-2.7-1.05-.64-.7-.96-1.66-.96-2.88V8.28h1.17v3.12c0 1.86.75 2.79 2.24 2.79 1.63 0 2.61-.92 2.95-2.75V8.28Z" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>

  <!-- Desktop Navigation -->
  <div class="hidden md:block lg:max-w-4xl lg:mx-auto">
    <nav class="flex space-x-4 justify-end items-center md:max-lg:max-w-4xl md:max-lg:mx-auto md:max-lg:px-8">
      <a href="/our-chapter"
        class="px-5 py-1.5 bg-gray-800 text-slate-100 rounded-md text-xs font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Our
        chapter</a>
      <a href="/our-sponsors"
        class="px-5 py-1.5 bg-gray-800 text-slate-100 rounded-md text-xs font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Our
        sponsors</a>
      <a href="/cncf"
        class="px-5 py-1.5 bg-gray-800 text-slate-100 rounded-md text-xs font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">CNCF</a>
      <a href="{{ route('blog') }}"
        class="px-5 py-1.5 bg-gray-800 text-slate-100 rounded-md text-xs font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">Blog</a>
      <a href="{{ route('cfps.create') }}"
        class="px-5 py-1.5 bg-gray-800 text-slate-100 rounded-md text-xs font-semibold uppercase hover:bg-accent hover:outline hover:outline-gray-800 transition ease-in-out duration-300">CFP</a>
      <a href="https://t.me/+E_G1XIVXTWMzYjU0" target="_blank">
        <svg class="h-7 fill-gray-800 hover:fill-accent hover:outline hover:outline-800 rounded-full transition ease-in-out duration-300" role="img"
          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <title>Telegram</title>
          <path
            d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
        </svg>
      </a>
     <a href="https://matrix.to/#/#cloudnativemu:matrix.meetup.mu" target="_blank">
       <svg class="h-7 fill-gray-800 hover:fill-accent hover:outline hover:outline-800 rounded-full transition ease-in-out duration-300" role="img"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <title>Matrix</title>
        <path
          d="M.632.55v22.9H2.28v.55h-.79A1.5 1.5 0 0 1 0 22.5V1.5A1.5 1.5 0 0 1 1.5 0h.79v.55H.632Zm22.736 0v22.9h1.648v.55h-.79A1.5 1.5 0 0 1 22.72 22.5V1.5A1.5 1.5 0 0 1 24 0h.79v.55h-1.422ZM4.415 12.3c0-1.398.543-2.5 1.63-3.3.955-.7 2.18-1.05 3.665-1.05.792 0 1.476.07 2.05.21v1.35a6.9 6.9 0 0 0-1.97-.3c-1.16 0-2.075.27-2.745.8-.68.54-1.02 1.28-1.02 2.22 0 .94.32 1.68.97 2.21.65.53 1.55.8 2.69.8.783 0 1.515-.1 2.195-.3v1.32c-.682.16-1.422.24-2.22.24-1.51 0-2.74-.35-3.7-1.05-1.078-.8-1.645-1.93-1.645-3.39Zm13.245-4.02h1.17v8.43h-1.17V13.8h-.04c-.52 1.1-1.56 1.65-3.12 1.65-1.16 0-2.06-.35-2.7-1.05-.64-.7-.96-1.66-.96-2.88V8.28h1.17v3.12c0 1.86.75 2.79 2.24 2.79 1.63 0 2.61-.92 2.95-2.75V8.28Z" />
      </svg>
    </a>
    </nav>
    <div class="md:mt-3 bg-primary lg:rounded-md lg:shadow-lg lg:border-2 lg:border-r-4 lg:border-b-4 lg:border-gray-800">
      <div class="py-3 px-3 md:py-6 md:px-6 md:max-lg:max-w-4xl md:max-lg:mx-auto md:max-lg:px-8">
        <a href="{{ route('home') }}" class="flex flex-row items-center gap-4">
          <div>
            <img src="/images/cloud-native-community-groups.svg" alt="Cloud Native Mauritius" class="h-16 w-16 md:h-20 md:w-20 rounded-sm" />
          </div>
          <div class="flex flex-col md:text-xl font-medium uppercase text-gray-50">
            <p>Cloud Native</p>
            <p>Community Groups</p>
            <p>Mauritius</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeMenu = document.getElementById('close-menu');

  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });
});
</script>
