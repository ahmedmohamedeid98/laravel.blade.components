<x-form method="{{$method}}" action="{{$action}}">
    <div>
        <button type="submit" class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">{{ $slot }}</button>
    </div>
</x-form>
