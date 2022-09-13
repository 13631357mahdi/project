<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagetitle = 'کامنت ها';
        $comments = Comment::orderBy('id', 'DESC')->paginate(15);
        return view('back.admin.comments.Comments', compact('pagetitle','comments'));

    }
    public function edit(Comment $comment)
    {
        //
        $pagetitle = 'ویرایش کامنت';
        return view('back.admin.comments.edit', compact('pagetitle','comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
        $messages = [
            'description.required' => 'فیلد کامنت را وارد نمایید',
        ];
        $validated = $request->validate([
            'description' => 'required',
        ], $messages);
        $comment->update($request->all());
        $msg= " ویرایش کامنت با موفقیت انجام شد";
        return redirect(route('index.comment'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        $comment->delete();
        $msg = 'ایتم مورد نظر حدف گردید.';
        return redirect(route('index.comment'))->with('success', $msg);
    }

    public function updatestatus(Comment $comment)
    {
        if($comment->status== 1)
        {
            $comment->status= 0;
        }else
        {
            $comment->status= 1;
        }
        $comment->save();
        $msg= 'بروزرسانی با موفقیت انجام شد';
        return redirect(route('index.comment'))->with('success', $msg);
    }
}
