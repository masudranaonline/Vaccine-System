<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class=" border sm:mx-auto sm:w-full sm:max-w-md p-4 shadow-md">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
              </div>
            
              <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
                  {{ Form::open([
                    'url' => route('vaccine.register'),
                    'method' => 'POST',
                    'enctype' => 'multipart/form-data'
                  ])}}
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Your Name</label>
                        <div class="mt-2">
                          <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>
                    <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">National Id Number</label>
                      <div class="mt-2">
                        <input id="nid" name="nid" type="number" autocomplete="nid" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                      <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Phone No</label>
                      <div class="mt-2">
                        <input id="number" name="number" type="number" autocomplete="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                  </div>
                  <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Center</label>
                      <div class="mt-2">
                          <select name="center_id" id="center" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <option value="">Choose Option</option>
                              @foreach ($centers as $center )
                                <option class=" border-t-2" value="{{ $center->id}}">{{ $center->center}}</option>
                              @endforeach
                        </select>
                      </div>
                  </div>
            
                  <div class=" pt-4">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                  </div>
                {{ Form::close() }}
              </div>
        </div>
    </div>

</body>
</html>