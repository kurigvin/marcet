<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Http\Requests\ListingRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Конструктор контроллера
     */
    public function __construct()
    {
        // Пользователь должен быть авторизован
        $this->middleware('auth');

        // Автоматическое связывание методов контроллера с методами политики ListingPolicy
        $this->authorizeResource(Listing::class, 'listing');
    }

    public function index(): Response
    {
        $listings = Listing::with('category', 'user')->paginate(10);
        return Inertia::render('Listings/Index', compact('listings'));
    }

    public function create(): Response
    {
        return Inertia::render('Listings/Create');
    }

    public function store(ListingRequest $request): RedirectResponse
    {
        $listing = Auth::user()->listings()->create($request->validated());
        return redirect()->route('listings.show', $listing);
    }

    public function show(Listing $listing): Response
    {
        return Inertia::render('Listings/Show', compact('listing'));
    }

    public function edit(Listing $listing): Response
    {
        return Inertia::render('Listings/Edit', compact('listing'));
    }

    public function update(ListingRequest $request, Listing $listing): RedirectResponse
    {
        $listing->update($request->validated());
        return redirect()->route('listings.show', $listing);
    }

    public function destroy(Listing $listing): RedirectResponse
    {
        $listing->delete();
        return redirect()->route('listings.index');
    }
}
