<x-template.article title="Syntax Highlihting">
    <x-slot name="content">
        <pre><x-torchlight-code language='php'>
            <li class="text-sm text-gray-600" :class="if (heading.tagName.toLowerCase() === 'h3') { return 'ml-4' } else if (heading.tagName.toLowerCase() === 'h4') { return 'ml-8' }">
                <a :href="'#'+heading.id" class="hover:text-gray-900" :class="visibleHeadingId == heading.id &amp;&amp; 'font-medium text-gray-900'" x-text="heading.innerText" href="#scope">Scope</a>
            </li>
        </x-torchlight-code></pre>
        <div>
            <h3 id="section-1">Section 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <h3 id="section-2">Section 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <h3 id="section-3">Section 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, maxime aliquam. Quas natus ea
                quibusdam tempore culpa ducimus earum in esse iure, ipsam, sed officia quasi accusantium optio, quia
                atque?</p>
        </div>
    </x-slot>

    <x-slot name="navigation">
        <a href="#section-1" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
            Section 1
        </a>
        <a href="#section-2" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
            Section 2
        </a>
        <a href="#section-3" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
            Section 3
        </a>

    </x-slot>
</x-template.article>
