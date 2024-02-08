<div class="mt-3">
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>

    <span class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Friends
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('friend.create') }}" class="dropdown-item">Add Friend</a></li>
            <li><a href="{{ route('friend.index') }}" class="dropdown-item">All Friends</a></li>

        </ul>
    </span>

    <span class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Gifts
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('gift.create') }}" class="dropdown-item">Add Gift</a></li>
            <li><a href="{{ route('gift.index') }}" class="dropdown-item">All Gifts</a></li>

        </ul>
    </span>

    <span class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Gifts Type
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('type.create') }}" class="dropdown-item">Add Gift Type</a></li>
            <li><a href="{{ route('type.index') }}" class="dropdown-item">All type of Gift </a></li>

        </ul>
    </span>

</div>
