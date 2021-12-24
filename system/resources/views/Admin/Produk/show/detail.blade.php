<p>
	Stok : {{$produk->stok}}  |
	Berat : {{$produk->berat}} gr |
	Seller : {{$produk->seller->nama}} |
	Diposting : {{$produk->created_at->diffForHumans()}}
</p>