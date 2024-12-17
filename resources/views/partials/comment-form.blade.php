<div class="card bg-base-300 shadow-xl p-6 mt-3">
    <form action="{{ route('comment.store', ['post' => $post]) }}" method="POST">
        @csrf
        <div class="form-control">
            <label class="label">
                <span class="label-text">Comment</span>
            </label>
            <textarea name="body" class="textarea h-24 textarea-bordered" placeholder="Your comment here"></textarea>
        </div>
        <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
