<div class="container"><br>
<h1 style="text-align: center;">Website Title</h1>
    <div style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1; margin-right: 20px;">
          
            @if (session('success'))
                <span class="btn btn-success">{{session('success')}}</span>
            @endif
            <br><br>
            <form wire:submit="createTitle" style="margin-bottom: 20px;">
                <div class="form-group">
                    <label><b>Website Title</b></label>
                    <input type="text" wire:model="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter Website Title">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
               
                
                <div wire:loading>
                    <span style="color: green;">Loading....</span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create Title</button>
            </form>
        </div>
        <div style="flex: 1;">
    <table wire:pole style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
        <thead><br><br><br>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 8px; border: 1px solid #ddd;">Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titles as $title)
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $title->title }}</td>
                <td > <button class="btn btn-danger" wire:click="delete({{$title->id}})"><i class="fas fa-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 10px;">
        {{$titles->links()}}
    </div>
</div>

    </div>
</div>
