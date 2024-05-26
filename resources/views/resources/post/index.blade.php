<x-app-layout>
    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Resource') }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-5">
                    <div class="card-body">
                        <div class="text-end">
                            <button type="button" class="btn btn-primary">
                                <i class="bi bi-file-earmark-plus-fill me-1"></i>
                                Add a New Post
                            </button>
                        </div>
                        <hr class="my-5">

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Post</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($posts) 
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->subject}}</td>
                                        <td>{{$post->post}}</td>
                                        <td>{{($post->status)}}</td>
                                        <td> 
                                            <a
                                                href="{{ route('post.show', $post) }}"
                                                class="btn btn-dark m-1"
                                                ><i class="bi bi-folder-symlink"></i
                                            ></a>

                                            <a
                                                type="button"
                                                class="btn btn-success m-1">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger m-1">
                                                <i class="bi bi-trash2-fill"></i>
                                            </button>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    @endforeach 
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
