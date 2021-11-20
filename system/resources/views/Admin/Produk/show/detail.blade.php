<p>
	Stok : {{$produk->stok}}  |
	Berat : {{$produk->berat}} kg |
	Seller : {{$produk->seller->username}} |
	Diposting : {{$produk->created_at->diffForHumans()}}
</p>