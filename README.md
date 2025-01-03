# Aenzbi WP Plugin

Aenzbi WP Plugin is a custom WordPress plugin designed to integrate with EBMS Burundi for invoice (facture) generation. This plugin enhances your WordPress site, making it easier to manage invoices directly within the WordPress environment.

## Features

- Seamless integration with EBMS Burundi.
- User-friendly interface to manage invoices.
- Automatic invoice generation for WooCommerce orders.
- Customizable settings for API key and invoice configurations.

## Prerequisites

- A WordPress installation (version 5.0 or higher).
- PHP 7.4 or higher.
- MySQL 5.6 or higher.
- WooCommerce installed and activated (if using WooCommerce features).
- Internet access for API calls.

## Installation

1. Clone the repository to your local environment:

   ```bash
   git clone https://github.com/aenzbi/aenzbi-wp-plugin.git
   ```

2. Move the cloned directory into the WordPress plugins directory:

   ```bash
   mv aenzbi-wp-plugin /var/www/aenzbi.bi/wp/wp-content/plugins/
   ```

3. Activate the plugin from the WordPress admin dashboard:

   - Go to **Plugins** > **Installed Plugins**.
   - Find **Aenzbi WP Plugin** in the list and click on **Activate**.

4. Configure the plugin settings:

   - Go to **Settings** > **Aenzbi WP Plugin**.
   - Enter your EBMS API key to enable the integration.

## Usage

Once the plugin is activated, you can manage invoices through the interface provided in the WordPress admin dashboard. The plugin automatically generates invoices for WooCommerce orders, simplifying the billing process.

### Plugin Settings

- **EBMS API Key**: Input your API key to connect with the EBMS API.
- **Invoice Settings**: Customize the default settings for invoice generation and management.

## Contributing

Contributions are welcome! If you would like to contribute to this plugin, please follow these steps:

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [WordPress](https://wordpress.org/) - The platform for this plugin.
- [EBMS Burundi](https://ebms.bi) - For providing an API for invoice management.
```

### Notes:

- **Adjust Paths**: Ensure the paths mentioned in the installation instructions match your server's directory structure.
- **API Key Management**: It's crucial to emphasize the security of the API key.
- **Contributing Section**: Encourage contributions and provide a clear process.
- **License**: Specify a license if needed (e.g., MIT, GPL, etc.), and ensure to include a corresponding `LICENSE` file in your repository.
- **Error Handling & Support**: You could also add sections for common issues or troubleshooting related to the plugin, alongside contact information for support, if applicable.
