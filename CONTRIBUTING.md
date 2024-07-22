# Contributing to Studizz API Package

We're thrilled that you're interested in contributing to the Studizz API Package! This document provides guidelines for contributing to this project. Please take a moment to review this document to make the contribution process smooth and effective for everyone involved.

## Getting Started

1. Fork the repository.
2. Clone your fork locally:
```
git clone git@github.com:your-username/studizz.git
```
3. Create a branch for your feature or fix:
```
git checkout -b feature/feature-or-fix-description
```
4. Make your changes and commit them with a clear commit message.
5. Push your branch to your fork:
```
git push origin feature/feature-or-fix-description
```
6. Open a pull request from your fork to the main repository.

## Development Setup

1. Install dependencies:
```
composer install
```
2. Copy the `.env.example` file to `.env` and fill in your Studizz API credentials.
3. Run the tests to ensure everything is set up correctly:
```
./vendor/bin/pest
```

## Coding Standards

This project follows the Laravel coding standards. Please ensure your code adheres to these standards before submitting a pull request.

You can check your code using Pint :

```
./vendor/bin/pint fix --test
```

To automatically fix coding standard issues:

```
./vendor/bin/pint
```

## Testing

All new features or bug fixes should be accompanied by unit tests. We use Pest for testing. To run the test suite:

```
./vendor/bin/pest
```

Please ensure all tests are passing before submitting a pull request.

## Pull Request Process

1. Ensure your code adheres to the coding standards and all tests pass.
2. Update the [README.md](README.md) with details of changes to the interface, if applicable.
3. Increase the version numbers in any examples files and the README.md to the new version that this Pull Request would represent. The versioning scheme we use is [SemVer](http://semver.org/).
4. Your pull request will be reviewed by the maintainers. They may suggest some changes or improvements or alternatives.
5. Once the pull request is approved, it will be merged into the main branch.

## Reporting Bugs

1. Ensure the bug was not already reported by searching on GitHub under [Issues](https://github.com/amphibee/studizz-api-package/issues).
2. If you're unable to find an open issue addressing the problem, [open a new one](https://github.com/amphibee/studizz-api-package/issues/new). Be sure to include a title and clear description, as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

## Feature Requests

Feature requests are welcome. But take a moment to find out whether your idea fits with the scope and aims of the project. It's up to you to make a strong case to convince the project's developers of the merits of this feature. Please provide as much detail and context as possible.

## Questions

If you have any questions about contributing, please feel free to contact the project maintainers at [dev@amphibee.fr](mailto:dev@amphibee.fr).

Thank you for contributing to the Studizz API Package!
