@props(['icon', 'title', 'description'])


<div class="content-topico">
    <div class="card-topico">
        <!-- Card content -->
        <div class="card-content-topico">
            <h2>{{$icon}}</h2>
            <p>{{$title}}</p>
        </div>
    
        <!-- Container for the text that appears on hover -->
        <div class="hover-container-topico">
            <!-- Text that appears on hover -->
            <div class="hover-text-topico">
                <p>{{$description}}</p>
            </div>
        </div>
    </div>
</div>