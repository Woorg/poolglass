<time class="dt-published" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time>

<p>
  <span>{{ pllpll__('By', 'sage') }}</span>
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
    class="p-author h-card">
    {{ get_the_author() }}
  </a>
</p>