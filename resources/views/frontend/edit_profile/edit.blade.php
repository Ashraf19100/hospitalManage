<x-frontend.layouts.master>
                <div class=" mt-6 space-y-6">
                <form method="post" action="{{ route('user.update',$id) }}" class=" mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div>
                        <pre>{{$id}}</pre>
                        <pre></pre>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full" required>
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">save</button>
                    </div>
                </form>
                </div>
</x-frontend.layouts.master>