 <?php
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return redirect('notloggedin');
        }
        else if(!Auth::user()->isAdmin)
        {
            return redirect('learnyoplace');
        }
        else
        {
        return $next($request);
        }    
    }
}
