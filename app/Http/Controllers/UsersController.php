<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Modules\News\Entities\News;

class UsersController extends Controller
{

    protected $repo;

    /**
     * RolesController constructor.
     * @param RoleRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repo = $repository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();

        $users = User::paginate(5);

        if ($user->hasRole('admin')) {
            return view('home', compact('users'));
        } else if ($user->hasRole('writer')) {
            $news = News::paginate(5);
            return view('news::index', compact('news'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $roleData = $this->repo->role();

        return view('create', compact('roleData'));
    }

    /**
     * @param UsersRequest $request
     * @return mixed
     */
    public function store(UsersRequest $request)
    {

        $this->repo->create($request);

        return redirect()->route('home')->withMessage('User create success!');
    }


    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    /**
     * @param UsersRequest $request
     * @param User $user
     * @return mixed
     */
    public function update(UsersRequest $request, User $user)
    {

        $user->assignRole($request->role);
        $user->update($request->only('first_name', 'last_name', 'password', 'status'));

        return redirect()->route('home')->withMessage('User update success!');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {

        $roleData = $this->repo->role();

        return view('edit', compact('user', 'roleData'));
    }

    /**
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->route('index')->withMessage('User DELETED');

    }

}
