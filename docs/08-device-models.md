# ERPOS Documentation

Document: Device Models

Version: 1.0

Status: Draft

Last Updated: 2026-08-06

Author: Md. Anisur Rahman

---

# Purpose

Device Models represent the specific products of a Brand.

---

# Examples

- Galaxy S24 Ultra
- Galaxy A56
- iPhone 16 Pro
- Latitude 7450
- XPS 13

---

# Relationships

Device Type

↓

Brand

↓

Device Model

---

# Fields

- Brand
- Name
- Slug
- Description
- Status
- Sort Order

---

# Business Rules

- Every Device Model belongs to one Brand.
- Device Models can be enabled or disabled.
- Slug must be unique.
