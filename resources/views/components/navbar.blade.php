<nav class="navbar navbar-light bg-light px-3 shadow-sm">
    <img src="https://img.freepik.com/premium-vector/wedding-organizer-logo-design-inspirations_586862-928.jpg"
        width="45" height="45" class="rounded-circle me-2" style="object-fit: cover; border: 2px solid #0d6efd;">

    <span class="navbar-brand text-primary fw-bold">
        Wedding Organizer
    </span>

    <a href="{{ route('profil', ['username' => request('username')]) }}">
        <img src="https://static.vecteezy.com/system/resources/previews/036/885/313/large_2x/blue-profile-icon-free-png.png"
        width="45" height="45" class="rounded-circle me-2" style="object-fit: cover; border: 2px solid">
    </a>
</nav>
