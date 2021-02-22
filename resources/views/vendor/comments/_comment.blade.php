@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp



<div id="comment-{{ $comment->getKey() }}" class="media">
    <img class="rounded-circle"
                        width="50" src="https://www.gravatar.com/avatar/{{ md5($comment->commenter->email ?? $comment->guest_email) }}.jpg?s=64" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar" />
    <div class="media-body">
        <div class="product-review pb-4 mb-4 border-bottom">
            <div class="d-flex mb-3 justify-content-between w-50">
                <div class="media media-ie-fix align-items-center mr-4 pr-2">
                    <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-0">{{ $comment->commenter->name ?? $comment->guest_name }}</h6><span
                            class="font-size-ms text-muted"> {{ $comment->created_at->diffForHumans() }} </span>
                    </div>
                </div>
                <div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                            class="sr-star czi-star-filled active"></i><i
                            class="sr-star czi-star-filled active"></i><i
                            class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                    <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                </div>
                <span class="ml-3">
                    @can('edit-comment', $comment)
                    <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}"
                        class="btn btn-outline-warning btn-pill btn-icon"><i class="czi-edit"></i></button>
                    @endcan
                    @can('delete-comment', $comment)
                    <a href="{{ route('comments.destroy', $comment->getKey()) }}"
                        onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();"
                        class="btn btn-outline-danger btn-pill btn-icon"><i class="czi-close    "></i></a>
                    <form id="comment-delete-form-{{ $comment->getKey() }}"
                        action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form>
                    @endcan
                </span>
            </div>
            <p class="font-size-md mb-2">
                {{ $comment->comment }}
            </p>
            <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1">
                    <span class="font-weight-medium">Pros:</span>
                    {{ $comment->pros ?? 'Not Specified'}}
                </li>
        
                <li class="mb-1">
                    <span class="font-weight-medium">Cons:</span>
                    {{ $comment->cons ?? 'Not Specified'}}
                </li>   
            </ul>
            <div class="text-nowrap">
                <button class="btn-like" type="button">15</button>
                <button class="btn-dislike" type="button">3</button>
                <span class="pl-2">
                @can('reply-to-comment', $comment)
                    <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}"
                        class="btn btn-secondary btn-icon"><i class="czi-chat"></i></button>
                    @endcan
                </span>
            </div>
        </div>

        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">@lang('comments::comments.edit_comment')</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">@lang('comments::comments.update_your_message_here')</label>
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">@lang('comments::comments.update')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">@lang('comments::comments.reply_to_comment')</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">@lang('comments::comments.enter_your_message_here')</label>
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="btn btn-sm btn-outline-primary text-uppercase">@lang('comments::comments.reply')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
</div>

{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif