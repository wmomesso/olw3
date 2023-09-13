<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-16 lg:pt-16">
            <section aria-labelledby="summary-heading"
                     class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">

                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item
                            name="Product 1"
                            price="10"
                            :features="[
                            'Feature 1',
                            'Feature 2'
                            ]"
                            image="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        />
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal" value="R$ 10"/>
                        <x-checkout.summary-item title="Frete" value="R$ 5.75"/>
                        <x-checkout.summary-item title="Total" value="R$ 15.75" :is-last="true"/>
                    </dl>

                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading"
                     class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">

                <form action="">
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informação de contato"/>
                            <div class="mt-6">
                                <x-input-label for="email-address" value="Email address"/>
                                <div class="mt-1">
                                    <x-text-input
                                        type="email"
                                        id="email-address"
                                        name="email"
                                        autocomplete="email"
                                        placeholder="Digite seu email"
                                    />
                                </div>
                            </div>
                            <div class="mt-6">
                                <x-section-title title="Detalhes do pagamento"/>
                                <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                    <div class="col-span-3 sm:col-span-4
                                    ">
                                        <x-input-label for="card-number" value="Número do cartão"/>
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="card-number"
                                                name="card-number"
                                                placeholder="Digite seu número do cartão"/>
                                        </div>
                                    </div>

                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="experition-date" value="Vencimento do cartão"/>
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="experition-date"
                                                name="experition"
                                                placeholder="MM/YYYY"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <x-input-label for="card-cvc" value="CVC"/>
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="card-cvc"
                                                name="cvc"
                                                placeholder="CVC"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

        </div>
    </div>
</x-app-layout>
