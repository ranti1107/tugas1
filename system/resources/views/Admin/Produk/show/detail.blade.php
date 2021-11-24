<p>
	Stok : {{$produk->stok}}  |
	Berat : {{$produk->berat}} gr |
	Seller : {{$produk->seller->username}} |
	Diposting : {{$produk->created_at->diffForHumans()}}
</p>