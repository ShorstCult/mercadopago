import { loadMercadoPago } from "@mercadopago/sdk-js";

await loadMercadoPago();
const mp = new window.MercadoPago("YOUR_PUBLIC_KEY");

