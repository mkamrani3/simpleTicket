{{--<li class="nav-item ml-2"><a class="btn btn-link" href="{{ route('admin.enrolled.index') }}">ثبت نام کنندگان</a></li>--}}
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        درخواست ها <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="btn btn-link" href="{{ route('ticket.index') }}">درخواست های من</a>
        </li>
        <li>
            <a class="btn btn-link" href="{{ route('ticket.new') }}">درخواست جدید</a>
        </li>
    </ul>
</li>