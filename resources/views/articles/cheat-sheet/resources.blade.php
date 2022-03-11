<x-template.article title="Resources">
    <x-slot name="content">
        <div>
            <h3 id="educational-resources">Educational Resources</h3>
            <p>
                Best resources to learn about Laravel, and stay up to date with coding.
            </p>
            <ul>
                <li>
                    <a href="https://laracasts.com/" target="_blank">Laracasts</a>
                    <p>The best place to learn anything laravel related, along with getting amazing support for your
                        laravel issues.</p>
                </li>
                <li>
                    <a href="https://stackoverflow.com/" target="_blank">Stack Overflow</a>
                    <p>My go to place to ask questions about coding, that I can't find in Google</p>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA" target="_blank">Laravel Daily
                    </a>
                    <p>Subscribe to the YouTube Channel and stay up to date on everything laravel related. You get to
                        learn some really hidden gems along the way.</p>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA" target="_blank">Fireship</a>
                    <p>The best channel to stay up to date on all the latest technologies.</p>
                </li>
                <li>
                    <a href="https://www.youtube.com/c/TailwindLabs" target="_blank">Tailwind Labs</a>
                    <p>Tailwind CSS Tutorials by the Tailwind Labs team</p>
                </li>
                <li>
                    <a href="https://laravel-livewire.com/screencasts/installation" target="_blank">Laravel Livewire</a>
                    <p>Amazing Livewire tutorials created by Caleb.</p>
                </li>
            </ul>
            <h3 id="code-snippets">Code Snippets</h3>
            <p>List of favorite websites to get code tips and examples</p>
            <ul>
                <li>
                    <a href="https://laravel-code.tips/" target="_blank">Laravel Code Tips</a>
                </li>
                <li>
                    <a href="https://shortcode.dev/laravel-cheatsheet#laravel-cheatsheet" target="_blank">Short Code</a>
                    <pre><x-torchlight-code language='php'>
                        // some examples
                        auth()->id()    // Returns null if the user is not logged in or a User id if they are.
                        auth()->user()  // Returns a User instance.
                        auth()->check() // Returns boolean: true for logged in.
                        auth()->guest() // Returns boolean: true for a guest user.
                    </x-torchlight-code></pre>
                </li>
                <li>
                    <a href="https://github.com/fzaninotto/Faker" target="_blank">List of Faker Examples</a>
                    <pre><x-torchlight-code language='php'>
                        // some examples
                        amPm($max = 'now')                    // 'pm'
                        dayOfMonth($max = 'now')              // '04'
                        dayOfWeek($max = 'now')               // 'Friday'
                        month($max = 'now')                   // '06'
                        monthName($max = 'now')               // 'January'
                        year($max = 'now')                    // '1993'
                        century                               // 'VI'
                        timezone                              // 'Europe/Paris'
                    </x-torchlight-code></pre>
                </li>
            </ul>
        </div>
    </x-slot>

    <x-slot name="navigation">
        <x-button.page-item name="Educational Resources" url="educational-resources" />
        <x-button.page-item name="Code Snippets" url="code-snippets" />
    </x-slot>
</x-template.article>
