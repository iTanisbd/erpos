# ERPOS Documentation

Document: Device Types
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Purpose

Device Types define the categories of serviceable devices in ERPOS.

---

# Examples

- Mobile
- Laptop
- Desktop
- Printer
- CCTV
- Television
- Air Conditioner

---

# Fields

- Name
- Slug
- Description
- Status
- Sort Order

---

# Business Rules

- Device Type names must be unique.
- Slug must be unique.
- Device Types can be disabled without deleting.
- Device Types will be used by Brands and Repair Tickets.