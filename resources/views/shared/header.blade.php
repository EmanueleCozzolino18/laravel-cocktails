<header class="bg-black">
    <nav class=" navbar-expand-lg ">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <a class="navbar-brand" href="{{ route('home') }}"><img class="w-80" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFJsxMyHdZCegEd7MQwgUkYwOn5ZmfS6Em9iWqhzqWyP5N8frDmijTO0BfvAeSOQGF_I&usqp=CAU" alt=""></a>
            </div>

            <div class="text-white" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <em><a class="nav-link fs-3" aria-current="page" href="{{ route('home') }}">Home</a></em>
                    </li>
                    <li class="nav-item px-3">
                        <em><a class="nav-link fs-3" href="#">Create</a></em>
                    </li>
                    <li class="nav-item px-3">
                        <em><a class="nav-link fs-3" href="{{ route('cocktails.index') }}">Cocktails</a></em>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<style scoped>

</style>