
<div class="wrapper">
    
    <x-navigation />

    <div class="container">
        <div class="left">
           <div class="content">
                <h1 class="post-title">{{ $euPost->title }}</h1>
                <p class="item"><strong class="item__title">Διάρκεια:</strong> 
                    <span>{{ $euPost->starts_from }} έως {{ $euPost->ends_at }}</span> 
                    <span>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;({{ $euPost->program_duration }} Μήνες)</span>
                </p>
                <div class="partners item">
                    <div class="item__title"><span><strong>Εταίροι:</strong></span></div>
                    <ul>
                        @foreach($euPost->partners as $partner)
                            <li>
                                <strong>{{ $partner['name'] }}</strong>, ({{ $partner['country'] }})
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <p class="item"><strong class="item__title">Ιστοσελίδα:</strong> <a target="_blank" class="website-link" href="{{$euPost->website}}">{{$euPost->website}}</a></p>

                <p class="item"><strong class="item__title">Αρχή:</strong> {{ $euPost->authority }}</p>

                <p class="item"><strong class="item__title">Πρόγραμμα:</strong> {{ $euPost->program_managing_entity }}</p>

                <div class="description">
                    <h4>Περιγραφή</h4>
                    <p>{{ $euPost->description }}</p>
                </div>
           </div>
        </div>
        <div class="right">
            <img src="{{asset("/images/$euPost->image") }}" alt="{{ $euPost->title }}">
        </div>
    </div>

</div>


<script>
    const rootImagePath = "\{{ asset('/images') }}" + "/"
</script>


