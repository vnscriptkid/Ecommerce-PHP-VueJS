@extends('admin/layout/base')

@section('title', 'Product Categories')

@section('content')
  <h2>Product Categories</h2>
  <div class="row expanded">
    <div class="columns small-12 medium-6">
      <form action="#" method="post">
        <div class="input-group">
          <input type="text" name="categorySearch" placeholder="Search category by name" class="input-group-field">
          <div class="input-group-button">
            <button class="button" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="columns small-12 medium-5">
        <form action="/admin/product/categories" method="post">
            <div class="input-group">
              <input type="text" name="categorySearch" placeholder="Add new category" class="input-group-field">
              <input type="hidden" name="csrfToken" value={{ \App\Classes\CsrfToken::getOrCreate() }} />
              <div class="input-group-button">
                  <button class="button" type="submit">
                      <i class="fas fa-plus-square"></i> Add
                  </button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="row expanded">
    <div class="columns medium-10">
      @if(count($categories))
        <table class="hover">
          <tbody>
            @foreach ($categories as $category)
                <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at->toFormattedDateString() }}</td>
                <td width="150">
                  <a href="#">
                    <i class="fas fa-edit"></i>
                    Edit
                  </a>
                  <a href="#">
                    <i class="fas fa-trash-alt"></i>
                    Delete
                  </a>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      @else
        <p>There is no categories yet</p>
      @endif
    </div>
  </div>
@endsection