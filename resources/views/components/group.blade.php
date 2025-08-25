<div>
  <h1>{{ $group->title }}</h1>
  <div class="mb-8">{!! $group->description !!}</div>
  <div class="lg:-mx-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($group->churches as $church)
      <x-church-card :church="$church"/>
    @endforeach
  </div>
</div>
