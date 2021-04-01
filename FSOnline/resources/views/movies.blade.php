@extends('layouts.master')

@section('content')

    @include('layouts.partials._nav')

  <div class="container">
      <h1 style="text-align: center; font-size: 50px;">
          MOVIES
      </h1>

      <div class="row">
          <form action="{{ route('movies.store') }}" method="post" class="form-validation form-styl-two" autocomplete="off">
              @csrf

              <div class="col-sm-6 col-12">
                  <input type="text"
                         placeholder="Nume film"
                         name="name"
                         class="@error('name') error @enderror">

                  @error('name')
                  <div class="error">{{ $message }}</div>
                  @enderror
              </div>

              <label for="genre">Genre</label>

              <select id="cars" name="genre">
                  <option value="Action">Action</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Drama">Drama</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Cartoons">Cartoons</option>
                  <option value="Adventure">Adventure</option>
              </select>


              {{--                <div class="col-sm-6 col-12">--}}
              {{--                    <input type="text"--}}
              {{--                           placeholder="Gen film"--}}
              {{--                           name="genre"--}}
              {{--                           class="@error('genre') error @enderror">--}}

              {{--                    @error('genre')--}}
              {{--                    <div class="error">{{ $message }}</div>--}}
              {{--                    @enderror--}}
              {{--                </div>--}}

              <div class="col-sm-6 col-12">
                    <textarea placeholder="Descriere"
                              name="description"
                              class="@error('description') error @enderror"></textarea>

                  @error('description')
                  <div class="error">{{ $message }}</div>
                  @enderror
              </div>

              <div class="col-sm-6 col-12">
                  <input type="text"
                         placeholder="Data lansare"
                         name="release"
                         class="@error('release') error @enderror">

                  @error('release')
                  <div class="error">{{ $message }}</div>
                  @enderror
              </div>


              <label for="language">Limba</label>

              <select id="cars" name="language">
                  <option value="English">English</option>
                  <option value="Romana">Romana</option>
                  <option value="French">French</option>
              </select>

              {{--                <div class="col-sm-6 col-12">--}}
              {{--                    <input type="text"--}}
              {{--                           placeholder="Limba"--}}
              {{--                           name="language"--}}
              {{--                           class="@error('language') error @enderror">--}}

              {{--                    @error('language')--}}
              {{--                    <div class="error">{{ $message }}</div>--}}
              {{--                    @enderror--}}
              {{--                </div>--}}

              <div class="col-sm-6 col-12">
                  <input type="number"
                         placeholder="Rating"
                         name="rating"
                         class="@error('rating') error @enderror">

                  @error('rating')
                  <div class="error">{{ $message }}</div>
                  @enderror
              </div>

              <div class="col-sm-6 col-12">
                  <input type="text"
                         placeholder="URL"
                         name="url"
                         class="@error('url') error @enderror">

                  @error('url')
                  <div class="error">{{ $message }}</div>
                  @enderror
              </div>


              <input type="submit" value="Adauga film!">
          </form>
      </div>


      @include('layouts.partials._list')


  </div> <!-- /.col- -->


