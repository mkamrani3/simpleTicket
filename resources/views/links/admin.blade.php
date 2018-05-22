<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        کاربران <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="btn btn-link" href="{{ route('admin.user') }}">مدیریت کابران</a>
        </li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        درخواست ها<span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="btn btn-link" href="{{ route('admin.ticket.un_assignee') }}">درخواست های بدون عامل</a>
        </li>
    </ul>
</li>